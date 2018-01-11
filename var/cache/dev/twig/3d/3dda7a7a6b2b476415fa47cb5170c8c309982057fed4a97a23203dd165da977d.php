<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2145a20f864c5d731fc9db301808bcad7cd3dcf381244e85cb6e7a6a955a516a extends Twig_Template
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
        $__internal_4d48f9459710da1662be2e112b23ba41b93b2b3c142622fb148366cc92795b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d48f9459710da1662be2e112b23ba41b93b2b3c142622fb148366cc92795b6a->enter($__internal_4d48f9459710da1662be2e112b23ba41b93b2b3c142622fb148366cc92795b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_3e04201bcdb0827e211f383158d4f2dfceb1d87bf2b648cd1b75b135bd7127e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e04201bcdb0827e211f383158d4f2dfceb1d87bf2b648cd1b75b135bd7127e9->enter($__internal_3e04201bcdb0827e211f383158d4f2dfceb1d87bf2b648cd1b75b135bd7127e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_4d48f9459710da1662be2e112b23ba41b93b2b3c142622fb148366cc92795b6a->leave($__internal_4d48f9459710da1662be2e112b23ba41b93b2b3c142622fb148366cc92795b6a_prof);

        
        $__internal_3e04201bcdb0827e211f383158d4f2dfceb1d87bf2b648cd1b75b135bd7127e9->leave($__internal_3e04201bcdb0827e211f383158d4f2dfceb1d87bf2b648cd1b75b135bd7127e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
