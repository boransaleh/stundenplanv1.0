<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_f4fbd63dcec930fed3d22f85d9099cf5abfe5b2f9a30fcc3da49f1776682af18 extends Twig_Template
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
        $__internal_ec5de3f41905bbe171080169548e92a4382b2674ca14cdc4b9837171d6a72c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec5de3f41905bbe171080169548e92a4382b2674ca14cdc4b9837171d6a72c1e->enter($__internal_ec5de3f41905bbe171080169548e92a4382b2674ca14cdc4b9837171d6a72c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_97b8960d0afe39b25cb9e2e937fb2a2051af501b4d689b980d03a48133ec151c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b8960d0afe39b25cb9e2e937fb2a2051af501b4d689b980d03a48133ec151c->enter($__internal_97b8960d0afe39b25cb9e2e937fb2a2051af501b4d689b980d03a48133ec151c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_ec5de3f41905bbe171080169548e92a4382b2674ca14cdc4b9837171d6a72c1e->leave($__internal_ec5de3f41905bbe171080169548e92a4382b2674ca14cdc4b9837171d6a72c1e_prof);

        
        $__internal_97b8960d0afe39b25cb9e2e937fb2a2051af501b4d689b980d03a48133ec151c->leave($__internal_97b8960d0afe39b25cb9e2e937fb2a2051af501b4d689b980d03a48133ec151c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
