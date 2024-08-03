import { Controller } from './stimulus.js'

export default class extends Controller {
    static targets = ['belly', 'nose', 'leftEar', 'rightEar']
    connect() {
        this.bellyTarget.addEventListener('click', () => this.sayHi(), {once: true})
        this.noseTarget.addEventListener('click', () => {
            this.element.classList.add('nose')
            setTimeout(() => this.element.classList.remove('nose'), 1400)
        })
        this.leftEarTarget.addEventListener('click', () => {
            this.element.classList.add('left-ear')
            setTimeout(() => this.element.classList.remove('left-ear'), 1400)
        })
        this.rightEarTarget.addEventListener('click', () => {
            this.element.classList.add('right-ear')
            setTimeout(() => this.element.classList.remove('right-ear'), 1400)
        })
    }

    waveHello() {
        this.element.classList.add('Belly')
        setTimeout(() => this.element.classList.add('Wave'), 250)
        setTimeout(() => {
            this.element.classList.remove('Belly')
            this.element.classList.remove('Wave')
            this.bellyTarget.addEventListener('click', () => this.waveHello(), {once: true})
        }, 1600)
        this.element.dispatchEvent(new Event('love'))
    }

    sayHi() {
        this.element.classList.add('Belly')
        setTimeout(() => {
            this.element.classList.remove('Belly')
            this.bellyTarget.addEventListener('click', () => this.sigh(), {once: true})
        }, 1600)
    }

    sigh() {
        this.element.classList.add('sigh')
        setTimeout(() => {
            this.element.classList.remove('sigh')
            this.bellyTarget.addEventListener('click', () => this.waveHello(), {once: true})
        }, 1600)
    }
}
