import React, { useState } from 'react';
import { Inertia } from '@inertiajs/inertia';
import Layout from './Layout';
export default function About({navigation,logo,adetect,tahun}) {
  return (
    <Layout navigation={navigation} logo={logo}>
        <main className="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-3 md:pt-6">
            <div className="grid grid-cols-1 md:grid-cols-1 gap-8">
                <div className="bg-white p-3 md:p-2 text-sm md:text-4xl md:mt-20">
                    <p className="mt-2 text-center text-4xl">About Company</p>
                    <p className="mt-2 md:hidden"><img src={adetect} alt="Adetect" className="w-full mb-4" /></p>
                </div>
            </div>
            <div className="grid grid-cols-1 md:grid-cols-2">
                <div className="bg-white p-3 md:p-2 text-sm md:text-3xl md:mt-20">
                    <p className="mt-2 text-justify">Adalah perusahaan yang menyediakan layanan, solusi, dan produk inovasi teknologi informasi. Didirikan pada tahun 2023, Adetech beralamat di Jakarta Selatan, Indonesia. Perusahaan ini lahir dari inisiatif para pendirinya yang dikenal sebagai ‘4-Sekawan’, yang memiliki pengalaman mumpuni di berbagai bidang industri. Dengan komitmen untuk menghadirkan inovasi berkelanjutan, Adetech Jaya Mandiri berfokus pada pengembangan solusi teknologi yang relevan dan efektif untuk mendukung kemajuan bisnis di era digital.</p>
                </div>
                <div className="bg-white p-3 md:p-8 text-sm md:text-4xl md:mt-20">
                    <img src={logo} alt="Logo" className="w-full mb-4" />
                    
                </div>
            </div>
            
        </main>
    </Layout>
  );
}
