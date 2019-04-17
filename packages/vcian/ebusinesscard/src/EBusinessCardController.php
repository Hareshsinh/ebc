<?php

namespace Vcian\EbusinessCard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;
use Vcian\EbusinessCard\repositories\EBusinessCardRepository;


class EBusinessCardController extends Controller
{
    /**
     * @var EBusinessCardRepository
     */
    protected $eBusinessCardRepository;


    /**
     * EBusinessCardController constructor.
     * @param EBusinessCardRepository $eBusinessCardRepository
     */
    public function __construct(EBusinessCardRepository $eBusinessCardRepository)
    {
        $this->eBusinessCardRepository = $eBusinessCardRepository;
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        try{
            $ebusinesscard = $this->eBusinessCardRepository->getEbusinessCards($request->all());
            return view('ebusinesscard.list', compact('ebusinesscard'));
        } catch (\Exception $exception){
            Log::error($exception->getMessage());
            redirect()->back()->with('error',$exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        try {
            $submit = 'Generate';
            return view('ebusinesscard.app',compact( 'submit'));
        } catch (\Exception $exception){
            Log::error($exception->getMessage());
            redirect()->back()->with('error',$exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            $this->eBusinessCardRepository->setEBusinessCard($request);
            return redirect('ebusinesscard')->with('success','Card generate successfully!');
        } catch (\Exception $exception){
            Log::error($exception->getMessage());
            redirect('ebusinesscard')->back()->with('error',$exception->getMessage());
        }
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($slug)
    {
        try {
            $ebusinesscard = EBusinessCard::where('slug',$slug)->first();
            $submit = 'Update';
            return view('ebusinesscard.app', compact('ebusinesscard', 'submit'));
        } catch (\Exception $exception){
            Log::error($exception->getMessage());
            redirect()->back()->with('error',$exception->getMessage());
        }
    }

    /**
     * @param $slug
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($slug, Request $request)
    {
        try {
            $this->eBusinessCardRepository->updateEBusinessCard($slug,$request);
            return redirect('ebusinesscard');
        } catch (\Exception $exception){
            Log::error($exception->getMessage());
            redirect()->back()->with('error',$exception->getMessage());
        }
    }

    /**
     * @param $slug
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($slug)
    {
        try {
            $this->eBusinessCardRepository->deleteEBusinessCard($slug);
            return redirect('ebusinesscard');
        } catch (\Exception $exception){
            Log::error($exception->getMessage());
            redirect()->back()->with('error',$exception->getMessage());
        }
    }
}