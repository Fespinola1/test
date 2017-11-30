<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*googlechrome");
    $this->setBrowserUrl("http://localhost:8080/ClinicaActualizada");
  }

  public function testMyTestCase()
  {
    $this->open("/ClinicaActualizada/index.php");
    $this->type("name=mail", "admin");
    $this->type("name=password", "admin");
    $this->click("//input[@value='Iniciar Sesion']");
    $this->waitForPageToLoad("40000");
    $this->Pause("2000");
    $this->click("//li[3]/a/p");
    $this->waitForPageToLoad("40000");
    $this->Pause("2000");
    $this->click("link=Registrar Paciente");
    $this->waitForPageToLoad("30000");
    $this->Pause("3000");
    $this->type("id=name", "jonathan");
    $this->type("id=lastname", "castro");
    $this->click("id=inlineCheckbox1");
    $this->type("id=address1", "1994-10-10");
    $this->type("name=address", "baca flor");
    $this->type("id=phone", "313131");
    $this->type("id=alergy", "notengo");
    $this->click("css=button.btn.btn-primary");
    $this->Pause("2500");
    $this->waitForPageToLoad("10000");
    
  }
}
?>