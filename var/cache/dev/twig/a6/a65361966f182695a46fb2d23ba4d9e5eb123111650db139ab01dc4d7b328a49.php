<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e15e7c8ea7e9ca8b24ca6eb2d0aec87ab9f1f0cda29af2f97f906be8204f4028 extends Twig_Template
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
        $__internal_bc172d088e7cdb337289a866560a8a7eb8849845cdcbc3983703820955e20f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc172d088e7cdb337289a866560a8a7eb8849845cdcbc3983703820955e20f90->enter($__internal_bc172d088e7cdb337289a866560a8a7eb8849845cdcbc3983703820955e20f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_95fc60b4dc598b9a58b663b30cb67eea001856a4bf30ba61a46c2fc1d627dd93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95fc60b4dc598b9a58b663b30cb67eea001856a4bf30ba61a46c2fc1d627dd93->enter($__internal_95fc60b4dc598b9a58b663b30cb67eea001856a4bf30ba61a46c2fc1d627dd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_bc172d088e7cdb337289a866560a8a7eb8849845cdcbc3983703820955e20f90->leave($__internal_bc172d088e7cdb337289a866560a8a7eb8849845cdcbc3983703820955e20f90_prof);

        
        $__internal_95fc60b4dc598b9a58b663b30cb67eea001856a4bf30ba61a46c2fc1d627dd93->leave($__internal_95fc60b4dc598b9a58b663b30cb67eea001856a4bf30ba61a46c2fc1d627dd93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
