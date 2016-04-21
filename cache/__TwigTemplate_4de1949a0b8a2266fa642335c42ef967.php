<?php

/* install/config.php.tpl */
class __TwigTemplate_4de1949a0b8a2266fa642335c42ef967 extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php 
/*****************************************************************************\\
+-----------------------------------------------------------------------------+
| SchoolReg                                                                   |
| Copyright (c) 2010 Z.                                                       |
| Copyright (c) 2009 Sergey V. Kuzin <sergey@kuzin.name>                      |
| All rights reserved.                                                        |
+-----------------------------------------------------------------------------+
\\*****************************************************************************/

\$config = array();
\$config['db']['db_host'] = '";
        // line 12
        echo (isset($context['db_server']) ? $context['db_server'] : null);
        echo "';
\$config['db']['db_user'] = '";
        // line 13
        echo (isset($context['db_login']) ? $context['db_login'] : null);
        echo "';
\$config['db']['db_passwd'] = '";
        // line 14
        echo (isset($context['db_passwd']) ? $context['db_passwd'] : null);
        echo "';
\$config['db']['db_base'] = '";
        // line 15
        echo (isset($context['db_name']) ? $context['db_name'] : null);
        echo "';

\$config['epochtasms']['login'] = '";
        // line 17
        echo (isset($context['epochtasms_login']) ? $context['epochtasms_login'] : null);
        echo "';
\$config['epochtasms']['passwd'] = '";
        // line 18
        echo (isset($context['epochtasms_passwd']) ? $context['epochtasms_passwd'] : null);
        echo "';
\$config['epochtasms']['from'] = '";
        // line 19
        echo (isset($context['epochtasms_from']) ? $context['epochtasms_from'] : null);
        echo "';

\$config['ui']['theme'] = 'south-street';

\$config['class']['numbers'] = range(1, 12);
\$config['class']['letters'] = array('А','Б','В','Г','Д');

?>
";
    }

}
