<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css.css">
        <title>Cards Maker</title>
    </head>
    <body>
        <header>
            <div class="logo"></div>
            <h1 class="Title">Cards Maker</h1>
            <form method="post">
                <label for="tema">Thema</label>
                <input id="tema" type="color">
                <label for="cor">Cor secundaria</label>
                <input id="cor" type="color">
                <input type="submit">
            </form>
        </header>
        <main>
            <fieldset class="modelo">     
                <legend>Modelo</legend>
                <div class="card">
                    <div class="header">
                        <h1>Nome</h1>
                    </div>
                    <div class="body">
                        <div class="img"></div>
                        <fieldset>
                            <legend>ATR</legend>
                            <input type="number" min="0" value="0">
                        </fieldset>
                        <fieldset>
                            <legend>ATR</legend>
                            <input type="number" min="0" value="0">
                        </fieldset>
                        <fieldset>
                            <legend>ATR</legend>
                            <input type="number" min="0" value="0">
                        </fieldset>
                        <fieldset>
                            <legend>ATR</legend>
                            <input type="number" min="0" value="0">
                        </fieldset>
                        <fieldset>
                            <legend>ATR</legend>
                            <input type="number" min="0" value="0">
                        </fieldset>
                        <div class="type">
                            O O O
                        </div>
                    </div>
                    <div class="footer">
                        <p>des des des des des des des des des des des des des des des des des des des des des des des des des des des </p>
                    </div>
                </div>
            </fieldset>
            <fieldset class="criar">
                <legend>Criar</legend>
                <form method="post">
                    <label>Nome:</label>
                    <input type="text">
                    <label>Nome:</label>
                    <input type="text">
                    <label>Nome:</label>
                    <input type="text">
                    <label>Nome:</label>
                    <input type="text">
                    <input type="submit" value="Criar">
                </form>
            </fieldset>
            <div class="deck">

            </div>
        </main>
        <footer>
            <h3 class="corp">Corp.cas</h3>
            <div class="link">
                <a style="background-image: url('https://logodownload.org/wp-content/uploads/2017/11/discord-logo-4-1.png');" href="#">#</a>
                <a style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/1365px-Facebook_f_logo_%282019%29.svg.png');" href="#">#</a>
                <a style="background-image: url('https://cdn.icon-icons.com/icons2/2368/PNG/512/github_logo_icon_143772.png');" href="#">#</a>
            </div>
        </footer>
        <!--Alert cel-->
        <script src="java.js"></script>
    </body>
</html>