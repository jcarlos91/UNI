<?php

/* HospitalBundle:Default:index.html.twig */
class __TwigTemplate_506b75e895b19414b5ed0ad3f1dbaf2b1a90fa7424abced4dda825f87e4dd8e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HospitalBundle::main.html.twig", "HospitalBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HospitalBundle::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"header\">
        <ul class=\"nav\">
                <li><a href=\"\">Inicio</a></li>
                <li><a href=\"\">Servicios</a>
                        <ul>
                                <li><a href=\"\">Submenu1</a></li>
                                <li><a href=\"\">Submenu2</a></li>
                                <li><a href=\"\">Submenu3</a></li>
                                <li><a href=\"\">Submenu4</a>
                                        <ul>
                                                <li><a href=\"\">Submenu1</a></li>
                                                <li><a href=\"\">Submenu2</a></li>
                                                <li><a href=\"\">Submenu3</a></li>
                                                <li><a href=\"\">Submenu4</a></li>
                                        </ul>
                                </li>
                        </ul>
                </li>
                <li><a href=\"\">Acerca de</a>
                        <ul>
                                <li><a href=\"\">Submenu1</a></li>
                                <li><a href=\"\">Submenu2</a></li>
                                <li><a href=\"\">Submenu3</a></li>
                                <li><a href=\"\">Submenu4</a></li>
                        </ul>
                </li>
                <li><a href=\"\">Contacto</a></li>
        </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "HospitalBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
