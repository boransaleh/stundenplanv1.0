<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_8698e104edbc6ce6185c086ebbe45cc056be8be1a3df4167aa71b97795226ba7 extends Twig_Template
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
        $__internal_1ec3be38f833fe2ad9c77991d488df558cc5dca97e14421487067323f7bba83e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ec3be38f833fe2ad9c77991d488df558cc5dca97e14421487067323f7bba83e->enter($__internal_1ec3be38f833fe2ad9c77991d488df558cc5dca97e14421487067323f7bba83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_9656708704b30471a08507e1561cba90fcd486e504e57271869f0b4920d90d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9656708704b30471a08507e1561cba90fcd486e504e57271869f0b4920d90d3f->enter($__internal_9656708704b30471a08507e1561cba90fcd486e504e57271869f0b4920d90d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_1ec3be38f833fe2ad9c77991d488df558cc5dca97e14421487067323f7bba83e->leave($__internal_1ec3be38f833fe2ad9c77991d488df558cc5dca97e14421487067323f7bba83e_prof);

        
        $__internal_9656708704b30471a08507e1561cba90fcd486e504e57271869f0b4920d90d3f->leave($__internal_9656708704b30471a08507e1561cba90fcd486e504e57271869f0b4920d90d3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
