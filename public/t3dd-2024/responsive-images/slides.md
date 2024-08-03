<h2>TYPO3 ❤️ Responsive Images</h2>

A must have, that <strike>should be</strike> <strong>is</strong><br>easy and fun to apply



<!-- .element: data-background-image="assets/pexels-ekamelev-3637551.jpg" -->
<h2 class="text-shadow" onclick="document.dispatchEvent(new Event('love'))">Helmut Hummel</h2>
<p class="text-shadow">@helhum@chaos.social</p>
<div style="display:flex;justify-content: center" data-controller="hearts"></div>



<!-- .element: data-background-image="assets/pexels-darrell-gough-217632-1200854.jpg" -->
<h2 class="text-shadow mt-400">Why bother?</h2>


<!-- .element: data-background-image="assets/pexels-pixabay-210019.jpg" -->
<h2 class="text-shadow">Performance</h2>


<!-- .element: data-background-image="assets/pexels-readymade-3850512.jpg" -->
<h2 class="text-shadow">Sustainability</h2>


<!-- .element: data-background-image="assets/pexels-yungsaac-1557254.jpg" -->
<h2 class="text-shadow">SEO</h2>



<!-- .element: data-background-image="assets/pexels-josh-willink-11499-1157390.jpg" -->
<h2 class="text-shadow mt-400">Features of the Platform</h2>



<!-- .element: data-background-image="assets/pexels-contact-me-923323219715-262056873-13176356.jpg" -->
<h2 class="text-shadow mt-200">preload scanner (pre parser)</h2>

<ul>
<li class="fragment text-shadow">Scans for resources (images) before DOM is parsed</li>
<li class="fragment text-shadow">https://web.dev/articles/preload-scanner</li>
</ul>




## Tags and Attributes
<a class="fragment" href="https://speakerdeck.com/s2b/pragmatic-responsive-images">https://speakerdeck.com/s2b/pragmatic-responsive-images</a>


## srcset
<pre><code class="language-html"><img srcset="
    ./assets/image_size_450.jpg 450w,
    ./assets/image_size_900.jpg 900w,
    ./assets/image_size_1800.jpg 1800w,
    ./assets/image_size_3500.jpg 3500w
" />
</code></pre>


## srcset
<a href="/t3dd-2024/responsive-images/demo/srcset/" target="_blank">Provide multiple resolutions of an image, the browser can choose from</a>


<!-- .slide: data-auto-animate -->
## sizes
<pre><code data-id="code-animation" class="language-html"><img srcset="
    ./assets/image_size_450.jpg 450w,
    ./assets/image_size_900.jpg 900w,
    ./assets/image_size_1800.jpg 1800w,
    ./assets/image_size_3500.jpg 3500w
" sizes="50vw" />
</code></pre>


<!-- .slide: data-auto-animate -->
## sizes
<pre><code data-id="code-animation" class="language-html"><img srcset="
    ./assets/image_size_450.jpg 450w,
    ./assets/image_size_900.jpg 900w,
    ./assets/image_size_1800.jpg 1800w,
    ./assets/image_size_3500.jpg 3500w
" sizes="(min-width: 768px) 50vw, 100vw" />
</code></pre>


## sizes
<a href="/t3dd-2024/responsive-images/demo/no-sizes/" target="_blank">Provide hints how large the render size of an image is</a>


## picture / source tags


<!-- .element: data-background-image="assets/pexels-efrem-efre-2786187-14915737.jpg" -->
<h2 class="text-shadow mt-200">When you need art direction</h2>


<pre><code data-id="code-animation" class="language-html">&#x3C;picture&#x3E;
    &#x3C;source
        srcset=&#x22;./assets/image_400_square.jpg 400w, ./assets/image_800_square.jpg 800w&#x22;
        sizes=&#x22;17vw&#x22;
        media=&#x22;(min-width: 768px)&#x22;
    &#x3E;
    &#x3C;source
        srcset=&#x22;./assets/image_400_cinema.jpg 400w, ./assets/image_800_cinema.jpg800w&#x22;
    &#x3E;
    &#x3C;img src=&#x22;./assets/image_400_cinema.jpg&#x22; &#x3E;
&#x3C;/picture&#x3E;
</code></pre>


## Summary
<ul>
<li class="fragment">Provide different image dimensions with "srcset"</li>
<li class="fragment">Hint image render size with "sizes"</li>
<li class="fragment">Use "picture" and "source" tags with media queries for art direction with different responsive breakpoints</li>
<li class="fragment">Have a look at: https://speakerdeck.com/s2b/pragmatic-responsive-images</li>
<li class="fragment">And watch Kevin Powell: https://www.youtube.com/watch?v=2QYpkrX2N48</li>
</ul>



## Web Platform 🤝 TYPO3
### Top Image


## More fun, less hassle



<!-- .element: data-background-image="assets/pexels-alex-andrews-271121-4553504.jpg" -->
<h2 class="text-shadow">Top Image</h2>


<!-- .element: data-background-image="assets/pexels-alex-andrews-271121-4553504.jpg" -->
<h2 class="text-shadow">Declarative configuration</h2>


<!-- .element: data-background-image="assets/pexels-alex-andrews-271121-4553504.jpg" -->
<h2 class="text-shadow">Close to the web platform</h2>


<!-- .element: data-background-image="assets/pexels-alex-andrews-271121-4553504.jpg" -->
<h2 class="text-shadow">Connects web platform features with TYPO3 features</h2>


<!-- .element: data-background-image="assets/pexels-alex-andrews-271121-4553504.jpg" -->
<h2 class="text-shadow">Trivial View Helper</h2>


<!-- .element: data-background-image="assets/pexels-alex-andrews-271121-4553504.jpg" -->
<h2 class="text-shadow">Clean and extensible API</h2>


<!-- .element: data-background-image="assets/pexels-alex-andrews-271121-4553504.jpg" -->
<h2 class="text-shadow">Great developer experience with debug mode</h2>


<!-- .element: data-background-image="assets/pexels-alex-andrews-271121-4553504.jpg" -->
<h2 class="text-shadow">(fully covered with tests)</h2>



## Demo



## Availability

Soon!


## Available

Now!

https://github.com/helhum/typo3-top-image/


## Part of TYPO3?

Maybe Soon!



## Questions?



<div data-controller="hearts">
<h1 onclick="this.dispatchEvent(new Event('love'))">Thank You</h1>
<p><a href="https://slides.helhum.io/t3dd-2024/responsive-images/">https://slides.helhum.io/t3dd-2024/responsive-images/</a></p>
<p>Helmut Hummel</p>
<p>@helhum@chaos.social</p>
</div>
