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
";
    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        // line 10
        echo "\t";
        $this->displayBlock('title', $context, $blocks);
    }

    public function block_title($context, array $blocks = array())
    {
        echo " ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "\t<section id=\"section\"> 
\t\t<article id=\"contenido\">
\t\t\t";
        // line 16
        $this->displayBlock('contenido', $context, $blocks);
        // line 19
        echo "\t\t</article>\t
\t</section> 
";
    }

    // line 16
    public function block_contenido($context, array $blocks = array())
    {
        // line 17
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
        return array (  77 => 17,  74 => 16,  68 => 19,  66 => 16,  62 => 14,  59 => 13,  49 => 10,  46 => 9,  40 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }
}
