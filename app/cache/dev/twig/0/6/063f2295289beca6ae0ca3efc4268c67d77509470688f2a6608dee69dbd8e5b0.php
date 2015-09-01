<?php

/* HospitalBundle::main.html.twig */
class __TwigTemplate_063f2295289beca6ae0ca3efc4268c67d77509470688f2a6608dee69dbd8e5b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "HospitalBundle::main.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/menu.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/access.css"), "html", null, true);
        echo "\">
";
    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        // line 11
        echo "\t";
        $this->displayBlock('title', $context, $blocks);
    }

    public function block_title($context, array $blocks = array())
    {
        echo " ";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "\t<section id=\"section\"> 
\t\t<article id=\"contenido\">
\t\t\t";
        // line 17
        $this->displayBlock('contenido', $context, $blocks);
        // line 20
        echo "\t\t</article>\t
\t</section> 
";
    }

    // line 17
    public function block_contenido($context, array $blocks = array())
    {
        // line 18
        echo "\t\t\t\tMi Contenido
\t\t\t";
    }

    public function getTemplateName()
    {
        return "HospitalBundle::main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 18,  78 => 17,  72 => 20,  70 => 17,  66 => 15,  63 => 14,  53 => 11,  50 => 10,  44 => 6,  40 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }
}
