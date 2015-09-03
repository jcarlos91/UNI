<?php

/* HospitalBundle:Cargos:cargos.html.twig */
class __TwigTemplate_c8c950f7cf069ddce558df367b4d15941fae5184ea41307b7383f0a847fbbc11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HospitalBundle::main.html.twig", "HospitalBundle:Cargos:cargos.html.twig", 1);
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
        echo "\t<article>
\t\t<h1>Listado de Cargos</h1>
\t\t<table class=\"header\">
\t\t\t<tr><th>ID</th>
\t\t\t\t<th>Nombre</th>
\t\t\t\t<th>Descripción</th>
\t\t\t\t<th>Editar</th>
\t\t\t\t<th>Eliminar</th>
\t\t\t</tr>
\t\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["cargos"]);
        foreach ($context['_seq'] as $context["_key"] => $context["cargos"]) {
            // line 14
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("hospital_cargo_detalle", array("id" => $this->getAttribute($context["cargos"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cargos"], "id", array()), "html", null, true);
            echo " </a></td>
\t\t\t\t\t<td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("hospital_cargo_detalle", array("id" => $this->getAttribute($context["cargos"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cargos"], "nombre", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t<td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("hospital_cargo_editar", array("id" => $this->getAttribute($context["cargos"], "id", array()))), "html", null, true);
            echo "\">Editar</a></td>
\t\t\t\t\t<td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("hospital_cargo_elimar", array("id" => $this->getAttribute($context["cargos"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a></td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cargos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t</table>
\t\t<input type=\"submit\" value=\"Nuevo\" onclick=\"window.location='";
        // line 22
        echo $this->env->getExtension('routing')->getPath("hospital_cargo_nuevo");
        echo "'\">
\t</article>
";
    }

    public function getTemplateName()
    {
        return "HospitalBundle:Cargos:cargos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  74 => 21,  65 => 18,  61 => 17,  55 => 16,  49 => 15,  46 => 14,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }
}
