<section class="section">
    <header id="header">
        <div id="logo">
            <img src="assets/img/Vector 2.svg" alt="Icone do site">
            <p> Diary </p>
        </div>
    </header>
    <div class="formulario">
        <div id="title">
            <img src="assets/img/log-in.svg" alt=""> 
            <h1> Login </h1>
        </div>
        <div id="subtitle">
            <p> Enter your information registration </p>
        </div>
        <form action="/login/store" method="post" id="form">
            <div class="fields">
                <label> E-mail </label>
                <input type="email" name="email" placeholder="Digite seu e-mail" value="<?php echo persistedData("email") ?> ">
                <?php echo message('email'); ?>
            </div>
            <div class="fields" id="password">
                <label> Password </label>
                <input type="password" name="password" placeholder="Digite sua senha" value="<?php echo persistedData("password") ?>">
                <?php echo message('password'); ?>
            </div>
            <div id="help">
                <a href=""> <span> Redeem password </span> </a>
            </div>
            <button type="submit"> Sign In </button>
            <div class="link-register">
                <a href="/register"> Don't have account? <span> Register </span> </a>
            </div>
        </form>
    </div>
</section>
<section class="image"> </section>