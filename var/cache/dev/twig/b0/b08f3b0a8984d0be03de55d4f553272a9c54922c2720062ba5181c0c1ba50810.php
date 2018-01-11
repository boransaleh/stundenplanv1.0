<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ba90a67c42047006af9a096ede2ad8e3aaa52bc42a5488635b57b1ae80bef490 extends Twig_Template
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
        $__internal_f1d1385896c85d1aa7b6f65928ecc55e530dd2f06f4ce13b0e59236bf81cbcfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1d1385896c85d1aa7b6f65928ecc55e530dd2f06f4ce13b0e59236bf81cbcfe->enter($__internal_f1d1385896c85d1aa7b6f65928ecc55e530dd2f06f4ce13b0e59236bf81cbcfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_c828466f9d6b5693aabb78fc1a54aab6c068f9b0002308d76b184ebce459dab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c828466f9d6b5693aabb78fc1a54aab6c068f9b0002308d76b184ebce459dab3->enter($__internal_c828466f9d6b5693aabb78fc1a54aab6c068f9b0002308d76b184ebce459dab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f1d1385896c85d1aa7b6f65928ecc55e530dd2f06f4ce13b0e59236bf81cbcfe->leave($__internal_f1d1385896c85d1aa7b6f65928ecc55e530dd2f06f4ce13b0e59236bf81cbcfe_prof);

        
        $__internal_c828466f9d6b5693aabb78fc1a54aab6c068f9b0002308d76b184ebce459dab3->leave($__internal_c828466f9d6b5693aabb78fc1a54aab6c068f9b0002308d76b184ebce459dab3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
