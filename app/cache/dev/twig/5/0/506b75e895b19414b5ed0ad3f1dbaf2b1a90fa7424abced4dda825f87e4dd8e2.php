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
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Inicio";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "<div id=\"header\">
    <ul class=\"nav\">
            <li><a href=\"\">Inicio</a></li>
            <li><a href=\"\">Pacientes</a>
                    <ul>
                            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("hospital_paciente_nuevo");
        echo "\">Alta</a></li>
                            <li><a href=\"\">Tratamiento</a>
                                <ul>
                                    <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("hospital_paciente_buscar");
        echo "\">Nuevo</a></li>
                                    <li><a href=\"\">Submenu2</a></li>
                                    <li><a href=\"\">Submenu3</a></li>
                                    <li><a href=\"\">Submenu4</a></li>
                                </ul>
                            </li>
                            <!--li><a href=\"\">Submenu4</a>
                                    
                            </li-->
                            <!--li><a href=\"\">Submenu3</a></li-->
                            
                    </ul>
            </li>
            <li><a href=\"\">Empleados</a>
                <ul>
                    <li><a href=\"\">Nuevo</a></li>
                </ul>
            </li>
            <li><a href=\"\">Catalogos</a>
                    <ul>
                            <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("hospital_cargo");
        echo "\">Cargos</a></li>
                            <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getUrl("hospital_tipoEmpleado_tipos");
        echo "\">Tipo Empleado</a></li>
                            <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("hospital_formas_pago");
        echo "\">Formas de Pago</a></li>
                            <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getUrl("hospital_TipoTratamiento_tipos");
        echo "\">Tipo de Tratamientos</a></li>
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
        return array (  86 => 36,  82 => 35,  78 => 34,  74 => 33,  51 => 13,  45 => 10,  38 => 5,  35 => 4,  29 => 3,  11 => 1,);
    }
}
