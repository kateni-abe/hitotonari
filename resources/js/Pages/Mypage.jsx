import React from "react";
import { InertiaLink } from "@inertiajs/inertia-react";

function Mypage({ user, typeDescription }) {
    return (
        <div className="min-h-screen flex flex-col items-center justify-center bg-gray-100">
            <div className="text-2xl font-bold mb-6">マイページ</div>

            {/* ユーザー名 */}
            <div className="text-xl mb-6">{user.name}</div>

            {/* 16typesとクロノタイプの説明 */}
            <div className="text-base mb-6">{typeDescription}</div>

            <div className="mb-4">
                <InertiaLink
                    href={route("mycard")}
                    className="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full"
                >
                    マイカードを表示
                </InertiaLink>
            </div>

            <div className="mb-4">
                <InertiaLink
                    href={route("compare")}
                    className="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full"
                >
                    フレンズとの特性を比較
                </InertiaLink>
            </div>

            {/* ハンバーガーメニューのスタブ (具体的な実装は後で行う) */}
            <div className="hamburger-menu">...</div>
        </div>
    );
}

export default Mypage;
