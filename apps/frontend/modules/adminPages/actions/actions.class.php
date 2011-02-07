<?php

class adminPagesActions extends sfActions
{
  
  public function executeIndex(sfWebRequest $request)
  {
    $this->pages = Doctrine::getTable('page')->findAll();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new pageForm();
  
    if ($request->getParameter('page'))
    {

      $this->form->bind($request->getParameter('page'));

      if ($this->form->isValid())
      {
        $item = $this->form->save();
        $this->redirect('@admin_pages_show?id='.$item->id);
      }
    }
        
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->form = new pageForm(Doctrine::getTable('page')->findOneById($request->getParameter('id')));

     if ($request->getParameter('page'))
      {
        $this->form->bind($request->getParameter('page'));
  
        if ($this->form->isValid())
        {
          $this->form->save();
          $this->redirect('@admin_pages');
          
        }
      }
  }
  
  public function executeShow(sfWebRequest $request)
  {
    $this->page = Doctrine::getTable('page')->findOneById($request->getParameter('id'));
  }

}