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
            'stylesheets' => array($this, 'block_stylesheets'),
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

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/access.css"), "html", null, true);
        echo "\">
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "    Login
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    <div id=\"login\">
        <h1>Inicio de Sesion</h1>
        <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"POST\">

            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Usuario\">

            <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Password\">

            <button type=\"submit\">login</button>
            <input type=\"hidden\" name=\"_target_path\" value=\"/index\">
            ";
        // line 21
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 22
            echo "                    <div id=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
            ";
        }
        // line 24
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
        return array (  77 => 24,  71 => 22,  69 => 21,  60 => 15,  55 => 13,  51 => 11,  48 => 10,  43 => 7,  40 => 6,  33 => 4,  30 => 3,  11 => 2,);
    }
}
