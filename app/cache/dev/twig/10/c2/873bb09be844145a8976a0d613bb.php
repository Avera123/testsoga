<?php

/* fscrudBundle:factura:new.html.twig */
class __TwigTemplate_10c2873bb09be844145a8976a0d613bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>factura creation</h1>

    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("factura_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
;
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <p>
            <button type=\"submit\">Create</button>
        </p>
    </form>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("factura");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("itemsfactura");
        echo "\">
            NUEVO ITEM
        </a>
    </li>
    <hr>
    <li>
        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("tercero");
        echo "\">
            NUEVO TERCERO
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "fscrudBundle:factura:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  61 => 20,  53 => 15,  42 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
