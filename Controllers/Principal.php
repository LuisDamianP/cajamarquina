<?php
class Principal extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }
    public function index()
    {
    }
    //Vista About
    public function about()
    {
        $data['title'] = 'Nosotros';
        $this->views->getView('principal', "about", $data);
    }
    //Vista Contact
    public function contact()
    {
        $data['title'] = 'Nuestros Contactos';
        $this->views->getView('principal', "contact", $data);
    }
    //Vista Menu
    public function menu()
    {
        $data['title'] = 'Nuestros Menús';
        $this->views->getView('principal', "menu", $data);
    }
    //Vista Reservación
    public function reservation()
    {
        $data['title'] = 'Reservaciones';
        $this->views->getView('principal', "reservation", $data);
    }
    //Vista Login
    public function login()
    {
        $data['title'] = 'Iniciar Sesión';
        $this->views->getView('principal', "login", $data);
    }
    //Vista Register
    public function register()
    {
        $data['title'] = 'Registrarse';
        $this->views->getView('principal', "register", $data);
    }
}
