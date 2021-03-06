<?php

require_once(PROJ_PATH . 'app/models/Article.php');
require_once(PROJ_PATH . 'app/models/Comment.php');
require_once(PROJ_PATH . 'app/models/User.php');

require_once(PROJ_PATH . 'app/controllers/ControllerArticle.php');

class ControllerAdmin extends Controller {
	function actionIndex() {
		$this->checkAuth();
	}
	
	function actionShowPanel() {
		$this->view->render(
			'index',
			'',
			'admin'
		);
	}

	function actionShowArticles() {
		$this->view->render(
			'articles',
			Article::all(),
			'admin'
		);
	}

	function actionShowComments() {
		$this->view->render(
			'adminLayout',
			'admin/comments',
			Comment::getComments()
		);
	}
	
	function actionShowLoginPanel() {
		$this->view->render(
			'authPanel',
			'',
			'user',
			'empty'
		);
	}
	
	function checkAuth() {
		isset($_POST['password'])
			? $pass = $_POST['password']
			: $pass = '';

		if ( $pass === '123' ) {
			return Controller::redirect('admin/show-panel');
		} else {
			return Controller::redirect('admin/show-login-panel');
		}
	}

	public function actionSaveArticle() {
		ControllerArticle::saveArticle($_POST);

		return Controller::redirect('/admin/show-articles');
	}

	public function actionDeleteArticle() {
		ControllerArticle::deleteArticle($_GET['id']);

		return Controller::redirect('/admin/show-articles');
	}

	public function actionModifyArticle() {
		$article;

		if ( isset($_GET['id']) ) {
			$article = Article::findOne($_GET['id']);
		} else {
			$article = new Article; //fix
			$article->title = '';
			$article->content = '';
			$article->img_preview_url = '';
			$article->author_id = 1;
			$article->save();
		}

		$this->view->render('modifyArticle', ['article' => $article], 'admin');
	}
}
