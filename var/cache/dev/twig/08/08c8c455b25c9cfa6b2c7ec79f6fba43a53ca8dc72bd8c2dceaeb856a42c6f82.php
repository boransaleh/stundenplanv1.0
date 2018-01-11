<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_4171d9a5a41540e5718a9aeaa531b5ec055f019439b452bd79ff7341326c9f56 extends Twig_Template
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
        $__internal_d0d7cce49efdb0d23ed5429f1631342c13b840dcad944e59c5f37a1aaf0f9e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d7cce49efdb0d23ed5429f1631342c13b840dcad944e59c5f37a1aaf0f9e96->enter($__internal_d0d7cce49efdb0d23ed5429f1631342c13b840dcad944e59c5f37a1aaf0f9e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_890de1517d3ff8c71b548fc14789cb5fc4f5e36eb52744aa4de1ceab6fe6f634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_890de1517d3ff8c71b548fc14789cb5fc4f5e36eb52744aa4de1ceab6fe6f634->enter($__internal_890de1517d3ff8c71b548fc14789cb5fc4f5e36eb52744aa4de1ceab6fe6f634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_d0d7cce49efdb0d23ed5429f1631342c13b840dcad944e59c5f37a1aaf0f9e96->leave($__internal_d0d7cce49efdb0d23ed5429f1631342c13b840dcad944e59c5f37a1aaf0f9e96_prof);

        
        $__internal_890de1517d3ff8c71b548fc14789cb5fc4f5e36eb52744aa4de1ceab6fe6f634->leave($__internal_890de1517d3ff8c71b548fc14789cb5fc4f5e36eb52744aa4de1ceab6fe6f634_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
