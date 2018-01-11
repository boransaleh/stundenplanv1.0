<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_bc0698a734a26a34f7ceaedf257e1befb3bb440889d3aa0cf3e87bffcbaae7a1 extends Twig_Template
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
        $__internal_4e464a9cdb197ffe6e5209cba960e34daf643e69196549bfd24938529ac7edc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e464a9cdb197ffe6e5209cba960e34daf643e69196549bfd24938529ac7edc4->enter($__internal_4e464a9cdb197ffe6e5209cba960e34daf643e69196549bfd24938529ac7edc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_086212ad2cfe0a25107f31a458ab355fbef53d569963dbabead68544e138cf93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086212ad2cfe0a25107f31a458ab355fbef53d569963dbabead68544e138cf93->enter($__internal_086212ad2cfe0a25107f31a458ab355fbef53d569963dbabead68544e138cf93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4e464a9cdb197ffe6e5209cba960e34daf643e69196549bfd24938529ac7edc4->leave($__internal_4e464a9cdb197ffe6e5209cba960e34daf643e69196549bfd24938529ac7edc4_prof);

        
        $__internal_086212ad2cfe0a25107f31a458ab355fbef53d569963dbabead68544e138cf93->leave($__internal_086212ad2cfe0a25107f31a458ab355fbef53d569963dbabead68544e138cf93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
