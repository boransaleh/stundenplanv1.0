<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f652c6db8d71d33d79808a9ae54a0240f78d4da6a6cc2f271ceec8075b04e8af extends Twig_Template
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
        $__internal_138c78a180d22653a7b0805b7aba17c9fba5270e299d0d9a7c64ad224ae96329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_138c78a180d22653a7b0805b7aba17c9fba5270e299d0d9a7c64ad224ae96329->enter($__internal_138c78a180d22653a7b0805b7aba17c9fba5270e299d0d9a7c64ad224ae96329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_689ccfa9bd837104fd12399d89c119b7209f958010cea8e2e5aa34ce857653d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_689ccfa9bd837104fd12399d89c119b7209f958010cea8e2e5aa34ce857653d3->enter($__internal_689ccfa9bd837104fd12399d89c119b7209f958010cea8e2e5aa34ce857653d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_138c78a180d22653a7b0805b7aba17c9fba5270e299d0d9a7c64ad224ae96329->leave($__internal_138c78a180d22653a7b0805b7aba17c9fba5270e299d0d9a7c64ad224ae96329_prof);

        
        $__internal_689ccfa9bd837104fd12399d89c119b7209f958010cea8e2e5aa34ce857653d3->leave($__internal_689ccfa9bd837104fd12399d89c119b7209f958010cea8e2e5aa34ce857653d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
