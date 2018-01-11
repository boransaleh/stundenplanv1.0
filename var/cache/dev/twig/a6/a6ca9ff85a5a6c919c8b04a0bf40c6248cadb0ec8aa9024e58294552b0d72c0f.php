<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_57c15f4b9ca9289704378552838b3abe2bec44d773b75db096801b61ae1cba48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f7b9201d299f72f1e96fc03496fe1cae421acee7a4eca9d0ca2733489c5dd6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f7b9201d299f72f1e96fc03496fe1cae421acee7a4eca9d0ca2733489c5dd6b->enter($__internal_0f7b9201d299f72f1e96fc03496fe1cae421acee7a4eca9d0ca2733489c5dd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_04e741736477a512bca251fe37beff06a8b0388757718dd99c412c330bcfc47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e741736477a512bca251fe37beff06a8b0388757718dd99c412c330bcfc47e->enter($__internal_04e741736477a512bca251fe37beff06a8b0388757718dd99c412c330bcfc47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_0f7b9201d299f72f1e96fc03496fe1cae421acee7a4eca9d0ca2733489c5dd6b->leave($__internal_0f7b9201d299f72f1e96fc03496fe1cae421acee7a4eca9d0ca2733489c5dd6b_prof);

        
        $__internal_04e741736477a512bca251fe37beff06a8b0388757718dd99c412c330bcfc47e->leave($__internal_04e741736477a512bca251fe37beff06a8b0388757718dd99c412c330bcfc47e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
