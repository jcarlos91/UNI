<?php

/* HospitalBundle:FormasPago:formas.html.twig */
class __TwigTemplate_e69310959ab2913512adc8c59d4e47089eb7e248441e7313b63224d5369daffa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HospitalBundle::main.html.twig", "HospitalBundle:FormasPago:formas.html.twig", 1);
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
\t\t<h1>Listado de Formas de Pago</h1>
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
        $context['_seq'] = twig_ensure_traversable($context["formasPago"]);
        foreach ($context['_seq'] as $context["_key"] => $context["formasPago"]) {
            // line 15
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("hospital_formas_pago_detalle", array("id" => $this->getAttribute($context["formasPago"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["formasPago"], "id", array()), "html", null, true);
            echo " </a></td>
\t\t\t\t\t<td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("hospital_formas_pago_detalle", array("id" => $this->getAttribute($context["formasPago"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["formasPago"], "nombre", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t<td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("hospital_formas_pago_detalle", array("id" => $this->getAttribute($context["formasPago"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["formasPago"], "descripcion", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t<td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("hospital_formas_pago_editar", array("id" => $this->getAttribute($context["formasPago"], "id", array()))), "html", null, true);
            echo "\">Editar</a></td>
\t\t\t\t\t<td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("hospital_formas_pago_eliminar", array("id" => $this->getAttribute($context["formasPago"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a></td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formasPago'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t</table>
\t\t<input type=\"submit\" value=\"Nuevo\" onclick=\"window.location='";
        // line 24
        echo $this->env->getExtension('routing')->getPath("hospital_formas_pago_nuevo");
        echo "'\">
\t</article>
";
    }

    public function getTemplateName()
    {
        return "HospitalBundle:FormasPago:formas.html.twig";
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
