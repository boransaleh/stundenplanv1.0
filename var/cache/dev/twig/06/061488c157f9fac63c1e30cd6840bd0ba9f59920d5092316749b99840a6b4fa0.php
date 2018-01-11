<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_24b64fa9a304589f58b572cf38ada1a061ff02444b2a0b9a0364260aaa100f9d extends Twig_Template
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
        $__internal_22e6d7ce1d6929df37e3ef96db67fe728fa565df481b4724d8d8a251de847148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22e6d7ce1d6929df37e3ef96db67fe728fa565df481b4724d8d8a251de847148->enter($__internal_22e6d7ce1d6929df37e3ef96db67fe728fa565df481b4724d8d8a251de847148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c500e6f91fa67075244bae6915c042be917ad8c14f129944560b366f2a2d42f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c500e6f91fa67075244bae6915c042be917ad8c14f129944560b366f2a2d42f4->enter($__internal_c500e6f91fa67075244bae6915c042be917ad8c14f129944560b366f2a2d42f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_22e6d7ce1d6929df37e3ef96db67fe728fa565df481b4724d8d8a251de847148->leave($__internal_22e6d7ce1d6929df37e3ef96db67fe728fa565df481b4724d8d8a251de847148_prof);

        
        $__internal_c500e6f91fa67075244bae6915c042be917ad8c14f129944560b366f2a2d42f4->leave($__internal_c500e6f91fa67075244bae6915c042be917ad8c14f129944560b366f2a2d42f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
