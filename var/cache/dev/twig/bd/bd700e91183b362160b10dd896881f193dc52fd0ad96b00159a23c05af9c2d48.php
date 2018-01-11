<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_1110a125a60ecd63fdc88daee1c1b0bdf0f650bb5fdda9af67d45e99058de8de extends Twig_Template
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
        $__internal_1b64bebc2f469bff3160cca4ea1b62bbd68849e32334e0e88380c4f27e546758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b64bebc2f469bff3160cca4ea1b62bbd68849e32334e0e88380c4f27e546758->enter($__internal_1b64bebc2f469bff3160cca4ea1b62bbd68849e32334e0e88380c4f27e546758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_61185f7cb94f67a90063d4d26421efdd7f6c88fd26a2d1801ccc00f3a6aedfbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61185f7cb94f67a90063d4d26421efdd7f6c88fd26a2d1801ccc00f3a6aedfbf->enter($__internal_61185f7cb94f67a90063d4d26421efdd7f6c88fd26a2d1801ccc00f3a6aedfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_1b64bebc2f469bff3160cca4ea1b62bbd68849e32334e0e88380c4f27e546758->leave($__internal_1b64bebc2f469bff3160cca4ea1b62bbd68849e32334e0e88380c4f27e546758_prof);

        
        $__internal_61185f7cb94f67a90063d4d26421efdd7f6c88fd26a2d1801ccc00f3a6aedfbf->leave($__internal_61185f7cb94f67a90063d4d26421efdd7f6c88fd26a2d1801ccc00f3a6aedfbf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
