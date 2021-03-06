<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
function autoload477564a6f46f4c2da537a21ae315fd4a($class) {
    static $classes = null;
    if ($classes === null) {
        $classes = array(
            'svnplugin' => '/svnPlugin.class.php',
            'svnplugindescriptor' => '/SvnPluginDescriptor.class.php',
            'svnplugininfo' => '/SvnPluginInfo.class.php',
            'tuleap\\svn\\backend\\backendsvn' => '/Svn/Backend/BackendSVN.php',
            'tuleap\\svn\\codebrowser\\codebrowsercontroller' => '/Svn/CodeBrowser/CodeBrowserController.class.php',
            'tuleap\\svn\\codebrowser\\codebrowserpresenter' => '/Svn/CodeBrowser/CodeBrowserPresenter.class.php',
            'tuleap\\svn\\dao' => '/Svn/Dao.class.php',
            'tuleap\\svn\\eventrepository\\systemevent_svn_create_repository' => '/events/SystemEvent_SVN_CREATE_REPOSITORY.class.php',
            'tuleap\\svn\\explorer\\explorercontroller' => '/Svn/Explorer/ExplorerController.class.php',
            'tuleap\\svn\\explorer\\explorerpresenter' => '/Svn/Explorer/ExplorerPresenter.class.php',
            'tuleap\\svn\\explorer\\repositorydisplaycontroller' => '/Svn/Explorer/RepositoryDisplayController.class.php',
            'tuleap\\svn\\explorer\\repositorydisplaypresenter' => '/Svn/Explorer/RepositoryDisplayPresenter.class.php',
            'tuleap\\svn\\repository\\cannotcreaterepositoryexception' => '/Svn/Repository/CannotCreateRepositoryException.class.php',
            'tuleap\\svn\\repository\\repository' => '/Svn/Repository/Repository.class.php',
            'tuleap\\svn\\repository\\repositorymanager' => '/Svn/Repository/RepositoryManager.class.php',
            'tuleap\\svn\\repository\\rulename' => '/Svn/Repository/RuleName.class.php',
            'tuleap\\svn\\servicesvn' => '/Svn/ServiceSvn.class.php',
            'tuleap\\svn\\svnrouter' => '/Svn/SvnRouter.class.php',
            'tuleap\\svn\\viewvcproxy\\viewvcproxy' => '/Svn/ViewVCProxy/ViewVCProxy.class.php'
        );
    }
    $cn = strtolower($class);
    if (isset($classes[$cn])) {
        require dirname(__FILE__) . $classes[$cn];
    }
}
spl_autoload_register('autoload477564a6f46f4c2da537a21ae315fd4a');
// @codeCoverageIgnoreEnd
