<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9386f7cb8652a91647e0f61d2d5b9bc8315da312a109a7c5b79e234c62cee170 extends Twig_Template
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
        $__internal_86db5ada1eb83771010f8b966befceebb1ab38dbe13249a7ccaf261006ad270b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86db5ada1eb83771010f8b966befceebb1ab38dbe13249a7ccaf261006ad270b->enter($__internal_86db5ada1eb83771010f8b966befceebb1ab38dbe13249a7ccaf261006ad270b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_e87ed5edf9f00d32ef0b3be5b4be728acab393911ddeb9f9594bf742eff488d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87ed5edf9f00d32ef0b3be5b4be728acab393911ddeb9f9594bf742eff488d3->enter($__internal_e87ed5edf9f00d32ef0b3be5b4be728acab393911ddeb9f9594bf742eff488d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_86db5ada1eb83771010f8b966befceebb1ab38dbe13249a7ccaf261006ad270b->leave($__internal_86db5ada1eb83771010f8b966befceebb1ab38dbe13249a7ccaf261006ad270b_prof);

        
        $__internal_e87ed5edf9f00d32ef0b3be5b4be728acab393911ddeb9f9594bf742eff488d3->leave($__internal_e87ed5edf9f00d32ef0b3be5b4be728acab393911ddeb9f9594bf742eff488d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
