import React, { useState } from 'react';
import { Inertia } from '@inertiajs/inertia';
import Layout from './Layout';
export default function Home({navigation,logo,adetect,tahun}) {
  return (
    <Layout navigation={navigation} logo={logo}>
        <main className="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-3 md:pt-6">
            <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div className="bg-white p-3 md:p-8 text-sm md:text-4xl md:mt-20">
                    <p className="mt-2 text-gray-600"><img src={adetect} alt="Adetect" className="w-full mb-4" /></p>
                    <b className="mt-2 text-gray-600">Alamat: </b>
                    <p className="mt-2 text-gray-600">D'Hara 24 Office Park, Jl. Salihara Nomor 15-16, Pasar Minggu Jakarta Selatan 12520</p>
                    <p className='mt-2'>Email :</p>
                    <p className="mt-2 text-gray-600">halo.adetech@gmail.com</p>
                </div>
                <div className="bg-white p-3 md:p-8 text-sm md:text-4xl">
                    <img src={tahun} alt="Logo" className="w-full mb-4" />
                </div>
            </div>
        </main>
    </Layout>
  );
}
