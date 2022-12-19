<section class="section">
    <header id="header">
        <div id="logo">
            <img src="assets/img/Vector 2.svg" alt="Icone do site">
            <p> Diary </p>
        </div>
    </header>
    <div class="form">
        <div id="title">
            <img src="assets/img/log-in.svg" alt="">
            <h1> Make your registration </h1>
        </div>
        <form action="/register/store" method="post" id="form">
            <div class="fields">
                <label> Name </label>
                <input type="text" name="name" placeholder="Type your name" value="<?php echo persistedData("name") ?>">
                <?php echo message("name"); ?>
            </div>
            <div class="fields">
                <label> E-mail </label>
                <input type="email" name="email" placeholder="Type your e-mail" value="<?php echo persistedData("email") ?>">
                <?php echo message("email"); ?>
            </div>
            <div class="fields" id="password">
                <label> Senha </label>
                <input type="password" name="password" placeholder="Type your password" value="<?php echo persistedData("password") ?>">
                <?php echo message("password"); ?>       
            </div>
            <button type="submit"> SignUp </button>
            <div class="link-register">
                <a href="/login"> Já possui uma conta? <span> logue-se </span> </a>
            </div>
        </form>
</section>
<section class="image"></section>