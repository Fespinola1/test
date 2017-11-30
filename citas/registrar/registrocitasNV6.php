<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*googlechrome");
    $this->setBrowserUrl("http://localhost:8080/");
  }

  public function testMyTestCase()
  {
    $this->open("/ClinicaActualizada/index.php");
    $this->type("name=mail", "admin");
    $this->type("name=password", "admin");
    $this->click("//input[@value='Iniciar Sesion']");
    $this->waitForPageToLoad("30000");
    $this->pause("2000");
    $this->click("//li[2]/a/p");
    $this->waitForPageToLoad("30000");
    $this->pause("2000");
    $this->click("link=Registrar Cita");
    $this->waitForPageToLoad("30000");
    $this->pause("2000");
    $this->select("name=pacient_id", "label=1 - jonathan castro");
    $this->select("name=medic_id", "label=1 - jonathan castro");
    $this->type("name=symtoms", "no dormir");
    $this->type("id=inputEmail1", "2017-10-10");
    $this->type("name=time_at", "04:05");
     $this->select("name=payment_id", "label=Pendiente");
    $this->select("name=status_id", "label=Pendiente");
     $this->type("name=price", "");
    $this->click("css=button.btn.btn-primary");
    $this->pause("2000");
    $this->waitForPageToLoad("3000");
   
  }
}
?>