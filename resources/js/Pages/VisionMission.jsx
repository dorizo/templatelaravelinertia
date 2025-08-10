import React, { useState } from 'react';
import { Inertia } from '@inertiajs/inertia';
import Layout from './Layout';
export default function VisionMission({navigation,logo,adetect,tahun}) {
  return (
    <Layout navigation={navigation} logo={logo}>
        <main className="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-3 md:pt-6">
            <div className="grid grid-cols-1 md:grid-cols-1 gap-8">
                <div className="bg-white p-3 md:p-2 text-sm md:text-4xl md:mt-20">
                    <p className="mt-2 text-center text-4xl">Vision & Mission</p>
                    <p className="mt-2 md:hidden"><img src={adetect} alt="Adetect" className="w-full mb-4" /></p>
                </div>
            </div>
            <div className="grid grid-cols-1 md:grid-cols-2">
                <div className="bg-white p-3 md:p-2 text-sm md:text-3xl md:mt-20">
                    <div className="m-10  p-3 rounded-lg px-6 py-8 ring shadow-xl  md:p-10 text-center md:text-3xl shadow bg-blue-500 text-white">Our Vision</div>
                    <p className="mt-2 text-justify">
                        Menjadi Mitra Teknologi Dunia yang Mengubah Teknologi Menjadi Keunggulan Bisnis Secara Kolaboratif.
                    </p>
                </div>
                <div className="bg-white p-3 md:p-2 text-sm md:text-3xl md:mt-20">
                    <div className="rounded-lg px-6 py-8 ring shadow-xl m-10 p-3 md:p-10 text-center md:text-3xl shadow bg-green-700 text-white">Our Mission</div>
                   <p className="mt-2 text-justify">
                    Menciptakan nilai tambah bagi seluruh pemangku kepentingan,memberdayakan bisnis melalui inovasi teknologi, solusi, dan layanan. Membangun lingkungan internal yang mendorong inovasi dengan semangat kolaborasi, integritas, dan kepercayaan.
                   </p>

                </div>
            </div>
            
        </main>
    </Layout>
  );
}
