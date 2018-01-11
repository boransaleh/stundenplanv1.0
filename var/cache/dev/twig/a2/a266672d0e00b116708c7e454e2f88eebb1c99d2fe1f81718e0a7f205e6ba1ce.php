<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_db10411115b2d677c503540e20bb43fa7268da0c09cd52ddcb58ee8cfffa6b1e extends Twig_Template
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
        $__internal_aeff0e9979c484493263b7c4cd0cb14dac767b45aed5e3d35441441355885ded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeff0e9979c484493263b7c4cd0cb14dac767b45aed5e3d35441441355885ded->enter($__internal_aeff0e9979c484493263b7c4cd0cb14dac767b45aed5e3d35441441355885ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_f02355260599e26b6f7cbf42f53df62beaf108414a0e23423dc7ffa66b507628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02355260599e26b6f7cbf42f53df62beaf108414a0e23423dc7ffa66b507628->enter($__internal_f02355260599e26b6f7cbf42f53df62beaf108414a0e23423dc7ffa66b507628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_aeff0e9979c484493263b7c4cd0cb14dac767b45aed5e3d35441441355885ded->leave($__internal_aeff0e9979c484493263b7c4cd0cb14dac767b45aed5e3d35441441355885ded_prof);

        
        $__internal_f02355260599e26b6f7cbf42f53df62beaf108414a0e23423dc7ffa66b507628->leave($__internal_f02355260599e26b6f7cbf42f53df62beaf108414a0e23423dc7ffa66b507628_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
