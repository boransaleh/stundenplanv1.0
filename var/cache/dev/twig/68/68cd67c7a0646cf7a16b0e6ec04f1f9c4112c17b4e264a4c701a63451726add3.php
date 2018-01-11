<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_a51db2d6726529066b27d10cd4ecc2e501149dc6d24e09c02de1210db73edcd6 extends Twig_Template
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
        $__internal_b0543dd1c891df370e8a47eb43e0166d08086dbe0dcd196e9e1a198992f6060d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0543dd1c891df370e8a47eb43e0166d08086dbe0dcd196e9e1a198992f6060d->enter($__internal_b0543dd1c891df370e8a47eb43e0166d08086dbe0dcd196e9e1a198992f6060d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_ae3987a15dadd50a13d62d6f4473fae5da9fc75a1b9fb16d9f1725b3014a9ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3987a15dadd50a13d62d6f4473fae5da9fc75a1b9fb16d9f1725b3014a9ba7->enter($__internal_ae3987a15dadd50a13d62d6f4473fae5da9fc75a1b9fb16d9f1725b3014a9ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b0543dd1c891df370e8a47eb43e0166d08086dbe0dcd196e9e1a198992f6060d->leave($__internal_b0543dd1c891df370e8a47eb43e0166d08086dbe0dcd196e9e1a198992f6060d_prof);

        
        $__internal_ae3987a15dadd50a13d62d6f4473fae5da9fc75a1b9fb16d9f1725b3014a9ba7->leave($__internal_ae3987a15dadd50a13d62d6f4473fae5da9fc75a1b9fb16d9f1725b3014a9ba7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
