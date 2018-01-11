<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_f83866916ae60ca9f3140c1d2e8ea104aa7ac6bc10513e20f9e8cafd44a89e6a extends Twig_Template
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
        $__internal_c52da43517e669d167bb178b0fd6ab54a2a10b5fe3033180efad760e1cfed4b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c52da43517e669d167bb178b0fd6ab54a2a10b5fe3033180efad760e1cfed4b1->enter($__internal_c52da43517e669d167bb178b0fd6ab54a2a10b5fe3033180efad760e1cfed4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_3ebd6e9cb738ef047bef9682bdda2977e529303fd39f168503835770cb728e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ebd6e9cb738ef047bef9682bdda2977e529303fd39f168503835770cb728e30->enter($__internal_3ebd6e9cb738ef047bef9682bdda2977e529303fd39f168503835770cb728e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c52da43517e669d167bb178b0fd6ab54a2a10b5fe3033180efad760e1cfed4b1->leave($__internal_c52da43517e669d167bb178b0fd6ab54a2a10b5fe3033180efad760e1cfed4b1_prof);

        
        $__internal_3ebd6e9cb738ef047bef9682bdda2977e529303fd39f168503835770cb728e30->leave($__internal_3ebd6e9cb738ef047bef9682bdda2977e529303fd39f168503835770cb728e30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
