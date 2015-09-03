<?php

/* HospitalBundle:TipoTratamiento:tipos.html.twig */
class __TwigTemplate_6e1f7b76f55a6c077ebdef7252359e0a334e057934e23122e0139d22b4affa0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HospitalBundle::main.html.twig", "HospitalBundle:TipoTratamiento:tipos.html.twig", 1);
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
\t\t<h1>Listado de Tratamientos</h1>
\t\t<table class=\"header\" boder=\"1\">
\t\t\t<tr><th>Nombre</th>
\t\t\t\t<th>Descripción</th>
\t\t\t\t<th>Editar</th>
\t\t\t\t<th>Eliminar</th>
\t\t\t</tr>
\t\t\t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["tipoTratamiento"]);
        foreach ($context['_seq'] as $context["_key"] => $context["tipoTratamiento"]) {
            // line 13
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("hospital_tipoTratamiento_detalle", array("id" => $this->getAttribute($context["tipoTratamiento"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipoEmpleado"]) ? $context["tipoEmpleado"] : $this->getContext($context, "tipoEmpleado")), "id", array()), "html", null, true);
            echo " </a></td>
\t\t\t\t\t<td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("hospital_tipoTratamiento_detalle", array("id" => $this->getAttribute($context["tipoTratamiento"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipoEmpleado"]) ? $context["tipoEmpleado"] : $this->getContext($context, "tipoEmpleado")), "nombre", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t<td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("hospital_tipoTratamiento_detalle", array("id" => $this->getAttribute($context["tipoTratamiento"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipoEmpleado"]) ? $context["tipoEmpleado"] : $this->getContext($context, "tipoEmpleado")), "descripcion", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t<td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("hospital_TipoTratamiento_editar", array("id" => $this->getAttribute($context["tipoTratamiento"], "id", array()))), "html", null, true);
            echo "\">Editar</a></td>
\t\t\t\t\t<td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("hospital_tipoTratamiento_eliminar", array("id" => $this->getAttribute($context["tipoTratamiento"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a></td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipoTratamiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t</table>
\t\t<input type=\"submit\" value=\"Nuevo\" onclick=\"window.location='";
        // line 22
        echo $this->env->getExtension('routing')->getPath("hospital_TipoTratamiento_nuevo");
        echo "'\">
\t</article>
";
    }

    public function getTemplateName()
    {
        return "HospitalBundle:TipoTratamiento:tipos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  79 => 21,  70 => 18,  66 => 17,  60 => 16,  54 => 15,  48 => 14,  45 => 13,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
