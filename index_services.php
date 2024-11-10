<style>
    .square-boxes {
        display: flex;
        justify-content: center;
        margin-top: -40px;
        z-index: 2;
        position: relative;
    }

    .box {
        width: 150px;
        height: 150px;
        margin: 0 10px;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        align-items: center;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        position: relative;
        overflow: hidden;
        background-size: cover;
        background-position: center;
    }

    .box img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
        border-radius: 5px;
    }

    .box p {
        position: absolute;
        bottom: 0;
        width: 100%;
        text-align: center;
        padding: 0.5rem 0;
        margin: 0;
        z-index: 2;
        font-size: 1rem;
    }
</style>

<div class="container square-boxes">
    <div class="box improve">
        <img src="image/parallex.jpg">
        <p class="p-2 text-center" alt="">Application support</p>
    </div>
    <div class="box">
        <img src="image/parallex.jpg">
        <p class="p-2 text-center" alt="">Batch/Jobs monitoring and support</p>
    </div>
    <div class="box improve">
        <img src="image/parallex.jpg">
        <p class="p-2 text-center" alt="">Custom Application Design and Development</p>
    </div>
    <div class="box">
        <img src="image/parallex.jpg">
        <p class="p-2 text-center" alt="">Production Support</p>
    </div>
</div>