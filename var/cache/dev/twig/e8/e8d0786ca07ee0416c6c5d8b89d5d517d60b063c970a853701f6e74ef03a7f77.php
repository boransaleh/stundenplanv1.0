<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7cf02b3eb070d156f04461be94b9c2feabe4828214369475feea8a2167e78263 extends Twig_Template
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
        $__internal_5dd73471024d9a974b064a8348a437b53471b1c381ac202180ef045c55968cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dd73471024d9a974b064a8348a437b53471b1c381ac202180ef045c55968cdb->enter($__internal_5dd73471024d9a974b064a8348a437b53471b1c381ac202180ef045c55968cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_6d62c004f7b79f85dcab5309b89333afe6ded5ebea708b275f3cd144cb04c4e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d62c004f7b79f85dcab5309b89333afe6ded5ebea708b275f3cd144cb04c4e6->enter($__internal_6d62c004f7b79f85dcab5309b89333afe6ded5ebea708b275f3cd144cb04c4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5dd73471024d9a974b064a8348a437b53471b1c381ac202180ef045c55968cdb->leave($__internal_5dd73471024d9a974b064a8348a437b53471b1c381ac202180ef045c55968cdb_prof);

        
        $__internal_6d62c004f7b79f85dcab5309b89333afe6ded5ebea708b275f3cd144cb04c4e6->leave($__internal_6d62c004f7b79f85dcab5309b89333afe6ded5ebea708b275f3cd144cb04c4e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
