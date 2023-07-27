import { Controller } from './stimulus.js'

const html = (strings, ...values) => {
    const template = document.createElement('template')
    template.innerHTML = String.raw(
        { raw: strings },
        ...values.map(value => value)
    ).trim().replace(/\s{2,}/g, ' ')
    return template.content.firstChild
}

export default class extends Controller {
    static targets = ['heart']

    heartsObserver

    initialize() {
        this.showHearts = this.showHearts.bind(this)
        this.observeHearts = this.observeHearts.bind(this)
        this.heartsObserver = new IntersectionObserver(this.observeHearts, {root: null})
    }

    connect() {
        document.addEventListener('love', this.showHearts)
    }

    disconnect() {
        document.removeEventListener('love', this.showHearts)
    }

    observeHearts(entries) {
        entries.forEach(entry => {
            if (!entry.isIntersecting && entry.rootBounds !== null) {
                this.heartsObserver.unobserve(entry.target)
                entry.target.remove()
            }
        })
    }

    showHearts() {
        this.addRandomHearts()
        const love = setInterval(() => {
            this.addRandomHearts()
        }, 300);
        setTimeout(() => clearInterval(love), 5000)
    }

    addRandomHearts() {
        const base = Math.random()
        const size = Math.floor(base * 65) + 10
        const duration = Math.floor((1 - base) * 5) + 5
        const offsetLeft = Math.floor(Math.random() * 100) + 1
        const additionalOffsetLeft = Math.floor(Math.random() * 40) + 1
        const color = Math.floor(Math.random() * 25) + 100

        this.createHeart({size, color, offsetLeft, duration});
        this.createHeart({size: size - 10, color, offsetLeft: offsetLeft + additionalOffsetLeft, duration: duration + 2, blueOffset: 25});
    }

    createHeart({size, offsetLeft, duration, color, blueOffset = 0}) {
        const heart = html`
            <div 
                class="heart"
                data-hearts-target="heart" 
                style="width:${size}px;
                    height:${size}px;
                    left:${offsetLeft}%;
                    background:rgba(255,${color - 25},${color + blueOffset},1);
                    animation:love ${duration}s ease">
            </div>`
        this.heartsObserver.observe(heart)
        this.element.append(heart)
    }
}
