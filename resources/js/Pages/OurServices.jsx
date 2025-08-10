import React, { useState } from 'react';
import { Inertia } from '@inertiajs/inertia';
import Layout from './Layout';
export default function VisionMission({navigation,logo,adetect,contentimage}) {
  return (
    <Layout navigation={navigation} logo={logo}>
        <main className="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-3 md:pt-6">
            <div className="grid grid-cols-1 md:grid-cols-1 gap-8">
                <div className="bg-white p-3 md:p-2 text-sm md:text-4xl md:mt-20">     
                    <div className="m-10  p-3 rounded-lg px-6 py-8 ring shadow-xl  md:p-10 text-center md:text-3xl shadow bg-blue-500 text-white">Our Services</div>
                </div>
            </div>
            <div className="grid grid-cols-1 md:grid-cols-1">
                <div className="bg-white p-3 md:p-2 text-sm md:text-3xl md:mt-20">
                    <img src={contentimage} alt="Content" className="w-full mb-4" />
                </div>
            </div>
            
        </main>
    </Layout>
  );
}
