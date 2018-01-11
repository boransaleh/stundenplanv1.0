<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_8135629f6e30e8661dab75654db6b2e71eea52500abeb1edce42a1b91e965e9a extends Twig_Template
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
        $__internal_d6296626812d2fb31a1fb3fde21c1dd63970ccd71bb0390a8a8fc3e7f81f14ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6296626812d2fb31a1fb3fde21c1dd63970ccd71bb0390a8a8fc3e7f81f14ac->enter($__internal_d6296626812d2fb31a1fb3fde21c1dd63970ccd71bb0390a8a8fc3e7f81f14ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_9e071c9affc6b29a1195f0028011ba2114b60f52b7ec1acb283fd490d3a6c0fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e071c9affc6b29a1195f0028011ba2114b60f52b7ec1acb283fd490d3a6c0fc->enter($__internal_9e071c9affc6b29a1195f0028011ba2114b60f52b7ec1acb283fd490d3a6c0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d6296626812d2fb31a1fb3fde21c1dd63970ccd71bb0390a8a8fc3e7f81f14ac->leave($__internal_d6296626812d2fb31a1fb3fde21c1dd63970ccd71bb0390a8a8fc3e7f81f14ac_prof);

        
        $__internal_9e071c9affc6b29a1195f0028011ba2114b60f52b7ec1acb283fd490d3a6c0fc->leave($__internal_9e071c9affc6b29a1195f0028011ba2114b60f52b7ec1acb283fd490d3a6c0fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
