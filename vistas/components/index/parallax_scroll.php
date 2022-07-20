<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<section class="section-index page-1">
    <article class="article-index">
        <h1 class="h1-index">Lorem ipsum dolor sit amet.</h1>
        <p>Libero deleniti molestiae perspiciatis id laboriosam tenetur aliquam placeat fugiat tempore sit molestias
            minima quisquam rerum veritatis esse laborum iusto similique voluptates blanditiis vel recusandae sed natus
            vero facere eligendi fuga earum reprehenderit dolorum aperiam necessitatibus consectetur modi commodi cumque
            impedit repudiandae.</p>
    </article>
    <div class="parallax">
    </div>
</section>
<section class="section-index page-2">
    <article class="article-index">
        <h1 class="h1-index">Consect adipisi elit nisi!</h1>
        <p>Ipsum illo consectetur ipsa iste eaque inventore ea labore qui. Ab labore quisquam illum odio provident
            placeat expedita nihil eligendi atque inventore!</p>
        <p>Aut necessitatibus atque facilis molestias sequi exercitationem minus! Laudantium laboriosam accusantium modi
            obcaecati aperiam sint eos perferendis placeat inventore minima. Nulla aliquam.</p>
    </article>
    <div class="parallax">
    </div>
    <div class="parallax">
    </div>
</section>

<style lang="scss">
    .section-index {
        position: relative;
        width: 100% !important;
        min-height: 1000px;
        overflow: hidden;
    }

    .h1-index {
        color: #4F9426;
        font-size: 65px;
        line-height: 64px;
        margin-bottom: 14px;
    }
    .article-index {
        position: absolute;
        top: 240px;
        left: 40px;
        width: 300px;
        z-index: 4;

        font-size: 18px;
        line-height: 22px;
        color: gray;
    }



    .page-2 > div:nth-of-type(1) {
        position: absolute;
        top: 0;
        left: 0;

        width: 100%;
        height: 1600px;

        background: url(https://raw.githubusercontent.com/manumorante/assets/master/codepen/nike-bg.jpeg) 50% 0 no-repeat fixed;
    }

    .page-2 > div:nth-of-type(2) {
        position: absolute;
        top: 0;
        left: 100px;

        width: 100%;
        height: 1600px;

        background: url(https://raw.githubusercontent.com/manumorante/assets/master/codepen/nike.png) 50% 0 no-repeat fixed;
    }

    .page-1 > div:nth-of-type(1) {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 1200px;

        background: url(https://raw.githubusercontent.com/manumorante/assets/master/codepen/bottle.jpeg) 50% 0 no-repeat fixed;
    }


</style>