<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_71322ee89cc02d49f3187157d9295523fc15556866ff42e76c7e19fd036bfae9 extends Twig_Template
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
        $__internal_69a1161f13de383ccf77a2caa4e2c01074119b95f23b6c2be1aa335a28cadb37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69a1161f13de383ccf77a2caa4e2c01074119b95f23b6c2be1aa335a28cadb37->enter($__internal_69a1161f13de383ccf77a2caa4e2c01074119b95f23b6c2be1aa335a28cadb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_708adeeed9c724262b8b8c37ee274af58ea398ebe0e4c1a85a0f50e517e78fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_708adeeed9c724262b8b8c37ee274af58ea398ebe0e4c1a85a0f50e517e78fc3->enter($__internal_708adeeed9c724262b8b8c37ee274af58ea398ebe0e4c1a85a0f50e517e78fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_69a1161f13de383ccf77a2caa4e2c01074119b95f23b6c2be1aa335a28cadb37->leave($__internal_69a1161f13de383ccf77a2caa4e2c01074119b95f23b6c2be1aa335a28cadb37_prof);

        
        $__internal_708adeeed9c724262b8b8c37ee274af58ea398ebe0e4c1a85a0f50e517e78fc3->leave($__internal_708adeeed9c724262b8b8c37ee274af58ea398ebe0e4c1a85a0f50e517e78fc3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
