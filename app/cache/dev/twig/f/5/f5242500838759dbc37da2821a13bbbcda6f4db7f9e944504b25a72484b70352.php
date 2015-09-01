<?php

/* HospitalBundle:Security:login.html.twig */
class __TwigTemplate_f5242500838759dbc37da2821a13bbbcda6f4db7f9e944504b25a72484b70352 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("HospitalBundle::main.html.twig", "HospitalBundle:Security:login.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "    Login
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    <div id=\"login\">
        <h1>Inicio de Sesion</h1>
        <form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"POST\">

            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Usuario\">

            <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Password\">

            <button type=\"submit\">login</button>
            <input type=\"hidden\" name=\"_target_path\" value=\"/index\">
            ";
        // line 19
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 20
            echo "                    <div id=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
            ";
        }
        // line 22
        echo "        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "HospitalBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  60 => 20,  58 => 19,  49 => 13,  44 => 11,  40 => 9,  37 => 8,  32 => 5,  29 => 4,  11 => 2,);
    }
}
