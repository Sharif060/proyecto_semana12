<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCita_detallesRequest;
use App\Http\Requests\UpdateCita_detallesRequest;
use App\Repositories\Cita_detallesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Cita_detallesController extends AppBaseController
{
    /** @var  Cita_detallesRepository */
    private $citaDetallesRepository;

    public function __construct(Cita_detallesRepository $citaDetallesRepo)
    {
        $this->citaDetallesRepository = $citaDetallesRepo;
    }

    /**
     * Display a listing of the Cita_detalles.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $citaDetalles = $this->citaDetallesRepository->all();

        return view('cita_detalles.index')
            ->with('citaDetalles', $citaDetalles);
    }

    /**
     * Show the form for creating a new Cita_detalles.
     *
     * @return Response
     */
    public function create()
    {
        return view('cita_detalles.create');
    }

    /**
     * Store a newly created Cita_detalles in storage.
     *
     * @param CreateCita_detallesRequest $request
     *
     * @return Response
     */
    public function store(CreateCita_detallesRequest $request)
    {
        $input = $request->all();

        $citaDetalles = $this->citaDetallesRepository->create($input);

        Flash::success('Cita Detalles saved successfully.');

        return redirect(route('citaDetalles.index'));
    }

    /**
     * Display the specified Cita_detalles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $citaDetalles = $this->citaDetallesRepository->find($id);

        if (empty($citaDetalles)) {
            Flash::error('Cita Detalles not found');

            return redirect(route('citaDetalles.index'));
        }

        return view('cita_detalles.show')->with('citaDetalles', $citaDetalles);
    }

    /**
     * Show the form for editing the specified Cita_detalles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $citaDetalles = $this->citaDetallesRepository->find($id);

        if (empty($citaDetalles)) {
            Flash::error('Cita Detalles not found');

            return redirect(route('citaDetalles.index'));
        }

        return view('cita_detalles.edit')->with('citaDetalles', $citaDetalles);
    }

    /**
     * Update the specified Cita_detalles in storage.
     *
     * @param int $id
     * @param UpdateCita_detallesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCita_detallesRequest $request)
    {
        $citaDetalles = $this->citaDetallesRepository->find($id);

        if (empty($citaDetalles)) {
            Flash::error('Cita Detalles not found');

            return redirect(route('citaDetalles.index'));
        }

        $citaDetalles = $this->citaDetallesRepository->update($request->all(), $id);

        Flash::success('Cita Detalles updated successfully.');

        return redirect(route('citaDetalles.index'));
    }

    /**
     * Remove the specified Cita_detalles from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $citaDetalles = $this->citaDetallesRepository->find($id);

        if (empty($citaDetalles)) {
            Flash::error('Cita Detalles not found');

            return redirect(route('citaDetalles.index'));
        }

        $this->citaDetallesRepository->delete($id);

        Flash::success('Cita Detalles deleted successfully.');

        return redirect(route('citaDetalles.index'));
    }
}
