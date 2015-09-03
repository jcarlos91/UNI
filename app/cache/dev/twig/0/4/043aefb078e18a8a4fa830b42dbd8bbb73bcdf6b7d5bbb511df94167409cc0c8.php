<?php

/* HospitalBundle:TipoEmpleado:tipos.html.twig */
class __TwigTemplate_043aefb078e18a8a4fa830b42dbd8bbb73bcdf6b7d5bbb511df94167409cc0c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HospitalBundle::main.html.twig", "HospitalBundle:TipoEmpleado:tipos.html.twig", 1);
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
\t\t<h1>Listado de Tipos de Empleados</h1>
\t\t<table class=\"header\" boder=\"1\">
\t\t\t<tr>
\t\t\t\t<th>ID</th>
\t\t\t\t<th>Nombre</th>
\t\t\t\t<th>Descripción</th>
\t\t\t\t<th>Editar</th>
\t\t\t\t<th>Eliminar</th>
\t\t\t</tr>
\t\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["tipoEmpleado"]);
        foreach ($context['_seq'] as $context["_key"] => $context["tipoEmpleado"]) {
            // line 15
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("hospital_TipoEmpleado_detalle", array("id" => $this->getAttribute($context["tipoEmpleado"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipoEmpleado"], "id", array()), "html", null, true);
            echo " </a></td>
\t\t\t\t\t<td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("hospital_TipoEmpleado_detalle", array("id" => $this->getAttribute($context["tipoEmpleado"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipoEmpleado"], "nombre", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t<td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("hospital_TipoEmpleado_detalle", array("id" => $this->getAttribute($context["tipoEmpleado"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipoEmpleado"], "descripcion", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t<td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("hospital_tipoEmpleado_editar", array("id" => $this->getAttribute($context["tipoEmpleado"], "id", array()))), "html", null, true);
            echo "\">Editar</a></td>
\t\t\t\t\t<td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("hospital_tipoEmpleado_borrar", array("id" => $this->getAttribute($context["tipoEmpleado"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a></td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipoEmpleado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t</table>
\t\t<input type=\"submit\" value=\"Nuevo\" onclick=\"window.location='";
        // line 24
        echo $this->env->getExtension('routing')->getPath("hospital_tipoEmpleado_nuevo");
        echo "'\">
\t</article>
";
    }

    public function getTemplateName()
    {
        return "HospitalBundle:TipoEmpleado:tipos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 24,  81 => 23,  72 => 20,  68 => 19,  62 => 18,  56 => 17,  50 => 16,  47 => 15,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }
}
