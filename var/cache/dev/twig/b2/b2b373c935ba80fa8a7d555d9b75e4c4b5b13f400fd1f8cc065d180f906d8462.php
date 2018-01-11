<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d3e102a3959a6d1536605d545b117cbe39580c632b74212c52348555cba6ec80 extends Twig_Template
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
        $__internal_96a46df658a04a720516075a29f130c538b334c5787bad4ce761831209098ce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a46df658a04a720516075a29f130c538b334c5787bad4ce761831209098ce3->enter($__internal_96a46df658a04a720516075a29f130c538b334c5787bad4ce761831209098ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_8034f32bbfba51a8fd6872cb2c15ed9fa548f67193f721309885bf6e87fa602a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8034f32bbfba51a8fd6872cb2c15ed9fa548f67193f721309885bf6e87fa602a->enter($__internal_8034f32bbfba51a8fd6872cb2c15ed9fa548f67193f721309885bf6e87fa602a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_96a46df658a04a720516075a29f130c538b334c5787bad4ce761831209098ce3->leave($__internal_96a46df658a04a720516075a29f130c538b334c5787bad4ce761831209098ce3_prof);

        
        $__internal_8034f32bbfba51a8fd6872cb2c15ed9fa548f67193f721309885bf6e87fa602a->leave($__internal_8034f32bbfba51a8fd6872cb2c15ed9fa548f67193f721309885bf6e87fa602a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
