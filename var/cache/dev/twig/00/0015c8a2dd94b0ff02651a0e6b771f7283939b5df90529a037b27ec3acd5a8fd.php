<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_91f98f9917b4a66797b24f73dde78f4f709c0105795742e0848e7a5ceab2da4a extends Twig_Template
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
        $__internal_e695277d5107d01667397eb836aa8370dea33047ac6c0693c78e7206bd37b9bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e695277d5107d01667397eb836aa8370dea33047ac6c0693c78e7206bd37b9bf->enter($__internal_e695277d5107d01667397eb836aa8370dea33047ac6c0693c78e7206bd37b9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_1efea7f355fed60cf06ed17a798e024e79d7d6f8ed99c1292207226d2edaf243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1efea7f355fed60cf06ed17a798e024e79d7d6f8ed99c1292207226d2edaf243->enter($__internal_1efea7f355fed60cf06ed17a798e024e79d7d6f8ed99c1292207226d2edaf243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e695277d5107d01667397eb836aa8370dea33047ac6c0693c78e7206bd37b9bf->leave($__internal_e695277d5107d01667397eb836aa8370dea33047ac6c0693c78e7206bd37b9bf_prof);

        
        $__internal_1efea7f355fed60cf06ed17a798e024e79d7d6f8ed99c1292207226d2edaf243->leave($__internal_1efea7f355fed60cf06ed17a798e024e79d7d6f8ed99c1292207226d2edaf243_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
