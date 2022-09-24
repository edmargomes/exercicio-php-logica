<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio2Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function IndiceExercicio2Test(AcceptanceTester $I)
    {
        $I->amOnPage("/");

        //Eu vejo "Exercício 2"
        $I->see('Exercício 2');
        $I->click("Exercício 2");
        $I->seeInTitle("Exercício 2");
    }
    // tests
    public function TitleExercicio2Test(AcceptanceTester $I)
    {
        //Eu estou na pagina "exercicio2"
        //I am on page "exercicio2"
        $I->amOnPage("/exercicio2");

        //Eu vejo o título "Exercicio 2"
        //I see "Exercício 2" in h1
        $I->seeInTitle("Exercício 2");
        $I->see('Exercício 2', 'h1');
    }

    public function FormExercicio2Test(AcceptanceTester $I)
    {
        /**
         * Entrar com um número e informar se ele é 
         * divisível por 10, por 5, por 2 ou se não é
         * divisível por nenhum destes
         */
        // Eu estou na pagina "exercicio2"
        $I->amOnPage("/exercicio2");
        // Eu digito 5 no campo valor
        $I->fillField("valor", "5");
        // eu clico em Enviar
        $I->click('Enviar');
        // Eu vejo "Esse número é divisivel por 5."
        $I->see('Esse número é divisivel por 5.');

        // Eu digito 7 no campo valor
        $I->fillField("valor", "7");
        // eu clico em Enviar
        $I->click('Enviar');
        // Eu vejo "Esse número não é divisivel por 10, 5 ou 2"
        $I->see('Esse número não é divisivel por 10, 5 ou 2.');

        // Eu digito 10 no campo valor
        $I->fillField("valor", "10");
        // eu clico em Enviar
        $I->click('Enviar');
        // Eu vejo "Esse número é divisivel por 10."
        $I->see('Esse número não é divisivel 10.');
        // Eu vejo "Esse número é divisivel por 5."
        $I->see('Esse número não é divisivel 5.');
        // Eu vejo "Esse número é divisivel por 2."
        $I->see('Esse número é divisivel por 2.');

        // Eu digito 12 no campo valor
        $I->fillField("valor", "12");
        // eu clico em Enviar
        $I->click('Enviar');
        // Eu vejo "Esse número é divisivel por 2."
        $I->see('Esse número é divisivel por 2.');
    }
}
