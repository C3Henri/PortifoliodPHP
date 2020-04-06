<html>
    <head>
        <title>
            formulario
        </title>
    </head>

    <!--Inserindo o codigo PHP-->
    <?php

    //Verifica se o formulario foi enviado
    if(isset($_POST['submit'])){
        //verifica se os campos se encontram vazios
        if(!empty($_POST["nome"] && $_POST["idade"] && $_POST["cidade"] && $_POST["estados"])){
        
            echo "Nome: " . $_POST["nome"]; 
            echo "</br>";
            echo "Idade: " . $_POST["idade"]; 
            echo "</br>";
            echo "Cidade onde mora: " . $_POST["cidade"]; 
            echo "</br>";
            foreach ($_POST['estados'] as $uf) {
                echo "UF: " . $uf . "</br>";
            }
        }

        else{
            echo "Por favor insira todos os dados solicitados";
        }
    }

    ?>

    <body>
        <form method="POST">
            Nome:  <input type="text" name="nome" id="nome"></br>
            Idade: <input type="number" name="idade" id="idade"></br>
            Cidade onde mora: <input type="cidade" name="cidade" id="cidade"></br>
            Estados que visitou: <select multiple="multiple" name="estados[]" size="10">
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AM">Amazonas</option>
                <option value="AP">Amapá</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
            </select></br>
            <input type="submit" name="submit" value="Enviar">
        </form>
            
    </body>
</html>