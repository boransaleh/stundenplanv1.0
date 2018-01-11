<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_49d306680fb0d967ca184e93d71f4c5ac66fdab780ae66b9bfde680cc708dc16 extends Twig_Template
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
        $__internal_dce2867ef93f6a2c655bcea481adb4069fcdc6feca8a98a0eb12b11f81c2adb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce2867ef93f6a2c655bcea481adb4069fcdc6feca8a98a0eb12b11f81c2adb3->enter($__internal_dce2867ef93f6a2c655bcea481adb4069fcdc6feca8a98a0eb12b11f81c2adb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_9ea4c626acee6e3e2fdea1848471e7a26b34f48e24c42d9a959d3975a56e436b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea4c626acee6e3e2fdea1848471e7a26b34f48e24c42d9a959d3975a56e436b->enter($__internal_9ea4c626acee6e3e2fdea1848471e7a26b34f48e24c42d9a959d3975a56e436b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_dce2867ef93f6a2c655bcea481adb4069fcdc6feca8a98a0eb12b11f81c2adb3->leave($__internal_dce2867ef93f6a2c655bcea481adb4069fcdc6feca8a98a0eb12b11f81c2adb3_prof);

        
        $__internal_9ea4c626acee6e3e2fdea1848471e7a26b34f48e24c42d9a959d3975a56e436b->leave($__internal_9ea4c626acee6e3e2fdea1848471e7a26b34f48e24c42d9a959d3975a56e436b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
